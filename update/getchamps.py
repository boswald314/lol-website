import json
import urllib2
import requests


f = open('/users/bryan/documents/learning/site/champs/update/champdata.json', 'w')
data = requests.get('https://na.api.pvp.net/api/lol/static-data/na/v1.2/champion?champData=all&api_key=80a03926-6e55-4045-bf6f-692ec7007ca1')
champ = data.json()
#print (champ['data']['Aatrox']['lore'])
json.dump(champ, f, sort_keys = True, indent = 4)


f.close()