import json

directory = '/Users/bryan/documents/learning/site/champs/pages/'

# open json file and load as python object
f = open('/users/bryan/documents/learning/site/champs/update/champdata.json', 'r')
data = json.load(f)
f.close() #close file -- we have our data
#from champ data, get list of champions
keys = sorted(data['keys'].keys())

for key in keys:
	champ = data['keys'][key]
	filename = directory + champ + '.php'
	f = open(filename, 'w')

	f.write('<!DOCTYPE html>\n')
	f.write('<html>\n')
	f.write('<head>\n ')
	f.write('	<meta charset="UTF-8">\n')
	f.write('	<link rel ="stylesheet" type="text/css"\n')
	f.write('	href="/champs/champpage.css">\n')
	f.write('	<?php $ch = curl_init(\'http://na.api.pvp.net/api/lol/static-data/na/v1.2/champion/' + key + '?champData=all&api_key=80a03926-6e55-4045-bf6f-692ec7007ca1\');\n')
	f.write('	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);\n')
	f.write('	$result = curl_exec($ch);\n')
	f.write('	$champdata = json_decode($result, true);\n	?>\n\n')
	f.write('	<div id="header">\n')
	f.write('		<h1>My LoL Website</h1>\n')
	f.write('		<h3>Your source for all things LoL</h3>\n')
	f.write('	</div>\n')
	f.write('</head>\n')
	f.write('<body>\n')
	f.write('	<div id="champ_info">\n')
	f.write('		<div id="champ_square">\n')
	f.write('			<img src="/champs/square/' + champ + '.png">\n')
	f.write('		</div>\n')
	f.write('		<div id="champ_header">\n')
	f.write('			<h1 id="champ_name"><?php print($champdata["name"]); ?></h1>\n')
	f.write('			<h2 id="champ_title"><?php print($champdata["title"]); ?></h2>\n')
	f.write('		</div>')
	f.write('		<div id="champ_pic">\n')
	f.write('			<img src="/champs/loading/' + champ + '_0.jpg">\n')
	f.write('		</div>\n')
	f.write('		<div id="lore_box">\n')
	f.write('			<div id="champ_tabs">\n')
	f.write('				<h3>Lore</h3>\n')
	f.write('				<h3>Stats</h3>\n')
	f.write('			</div>\n')
	f.write('			<div id="champ_lore">\n')
	f.write('				<?php print($champdata["lore"]); ?> \n')
	f.write('			</div>\n')
	f.write('		</div>\n')
	f.write('	</div>\n')
	f.write('</html>\n')
