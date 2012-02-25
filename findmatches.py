#! usr/bin/python

from math import fsum
from operator import itemgetter

print "niaje, this is matches"
	
# matches = []
# matches.append([2, 1 , 0, 5, 3.7])
# matches.append([3, 1 , 0, 3, 3.8])
# matches.append([5, 1 , 3, 2, 2.9])
# matches.append([6, 1 , 1, 3, 1.5])
# matches.append([4, 2 , 2, 4, 2.6])

# print "len = " , len(matches)

matches_ids = [2, 3, 5, 6, 4] # nodes connected to source node
distances = [1, 1, 1, 1, 2]
num_skills = [3, 0, 2, 2, 2]
clouts = [5, 3, 2, 3, 4]
ratings = [3.7, 3.1, 2.5, 1.5, 2.6]

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
