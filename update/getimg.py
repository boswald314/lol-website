import urllib
import json
import httplib

loading = 'http://ddragon.leagueoflegends.com/cdn/img/champion/loading/'
splash = 'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/'
square = 'http://ddragon.leagueoflegends.com/cdn/4.4.3/img/champion/'

loadfolder = '/users/bryan/documents/learning/site/champs/loading/'
splashfolder = '/users/bryan/documents/learning/site/champs/splash/'
squarefolder = '/users/bryan/documents/learning/site/champs/square/'


f = open('/Users/bryan/documents/learning/site/champs/update/champdata.json', 'r')
data = json.load(f)

#print json.dumps(data,sort_keys=True, indent =4)
champs = data['keys']

for champion in champs.values():
	for skin in data['data'][champion]['skins']:
		url = loading + champion + "_" + str(skin['num']) + ".jpg"
		filename = loadfolder + champion + "_" + str(skin['num']) + ".jpg"
		resource = urllib.urlopen(url)
		output = open(filename, "wb")
		output.write(resource.read())
		output.close()

	
		url = splash + champion + "_" + str(skin['num']) + ".jpg"
		filename = splashfolder + champion + "_" + str(skin['num']) + ".jpg"
		resource = urllib.urlopen(url)
		output = open(filename, "wb")
		output.write(resource.read())
		output.close()

		url = square + champion +  ".png"
		filename = squarefolder + champion +  ".png"
		resource = urllib.urlopen(url)
		output = open(filename, "wb")
		output.write(resource.read())
		output.close()
