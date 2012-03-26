#! usr/bin/python

from math import fsum
from operator import itemgetter
import MySQLdb

print "niaje, this is matches"

# hard code the function arguments for now - CHANGE!!!
requester_id = 1
skill_required = 1

db = MySQLdb.connect(host="72.167.233.37",user="dumaremote",
                    passwd="kaziPap!1",db="dumaremote");

matches_ids = [] # nodes connected to source node
distances = []
num_skills = []
clouts = []
ratings = []

#This assumes that every time you add a skill, you increment num_skills in the
#meta table
def find_friends_with_skills(user_id, skill_id):
    distance = 1
    c = db.cursor()
    query = ('SELECT user_b, clout, skill_id, rating, num_skills from connections, meta, user_skills where connections.user_a = %d and meta.user_id = connections.user_b and user_skills.user_id = connections.user_b' %user_id)
    c.execute(query)
    row = c.fetchone()
    friends = []
    while row:
        if row['skill_id'] == str(skill_id):
            matched_ids.append(row['user_b'])
            distances.append(distance)
            num_skills.append(row['num_skills'])
            clouts.append(row['clout'])
            ratings.append(row['rating'])
        friends.append(row['user_b'])
        row = c.fetchone()
    
    while len(matched_ids) == 0 and distance <= 3:
        distance = distance + 1
        nextfriends = []
        for friend in friends:
            c.execute('SELECT user_b, clout, skill_id, rating, num_skills from connections, meta, user_skills where connections.user_a = %d and meta.user_id = connections.user_b and user_skills.user_id = connections.user_b' %friend)
            row = c.fetchone()
            while row:
                if row['skill_id'] == str(skill_id):
                    matched_ids.append(row['user_b'])
                    distances.append(distance)
                    num_skills.append(row['num_skills'])
                    clouts.append(row['clout'])
                    ratings.append(row['rating'])
                nextfriends.append(row['user_b'])
                row = c.fetchone()
        friends = nextfriends
        nextfriends = []
        
def main():
    #these variables are hard-coded at the top - change asap!!
    find_friends_with_skills(requester_id, skill_required)

    len = len (matches_ids)
    sum_dist = fsum(distances)
    sum_nskill = fsum(num_skills)
    sum_clout = fsum(clouts)
    sum_rating = fsum(ratings)

    #print "sum dist = " , sum_dist
    overallscores = []
    matches_dict = {}

    # compute overall ranks
    i = 0
    for j in matches_ids:
        dist = distances[i]
        nskills = num_skills[i]
        clout = clouts[i]
        rating = ratings[i]
        
        normd_dist = dist/(1.0 * sum_dist)
        normd_skill = nskills/(1.0 * sum_nskill)
        normd_clout = clout/(1.0 * sum_clout)
        normd_rating = rating/(1.0 * sum_rating)
        
        #print "ndist: ", normd_dist, "nskill: ", normd_skill, "nclout: ", normd_clout, "nratg: ", normd_rating
        
        #overall_score = (1/normd_dist)*(1/(1.0*dist)) + normd_skill*nskills + normd_clout*clout + normd_rating*rating
        overall_score = (1/normd_dist) + normd_skill + normd_clout + normd_rating
        matches_dict[j] = overall_score
        #overallscores.append(overall_score)
        #print "j: ", j, "ovr score: ", overall_score, "ndist: ", normd_dist, "nskill: ", normd_skill, "nclout: ", normd_clout, "nratg: ", normd_rating
        i = i + 1

    # sort by ranks, and 
    sorted_matches = sorted(matches_dict.iteritems(), key=itemgetter(1), reverse=True)
    print sorted_matches

    # return top k matches

if __name__ == 'main'':
    main()
