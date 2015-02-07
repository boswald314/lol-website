import json
import operator

directory = '/Users/bryan/documents/learning/site/champs/'

f = open('/users/bryan/documents/learning/site/champs/update/champdata.json', 'r')
data = json.load(f)
f.close() #close file -- we have our data
#from champ data, get list of champions
champs = sorted(data["keys"], key=data["keys"].get)


filename = directory + 'championgrid.html'
f = open(filename, 'w')
f.write('<html>\n')
f.write('<head>\n')
f.write('	<link rel="stylesheet" type="text/css" href="/champs/grid.css">\n\n')
f.write('	<div id="header">\n')
f.write('		<h1>My LoL Website</h1>\n')
f.write('		<h3>Your source for all things LoL</h3>\n')
f.write('	</div>\n')
f.write('</head>\n\n')
f.write('<body>\n')
f.write('	<div id="rounded">\n\n')
f.write('		<div id="main" class="container"><!-- our main container element -->\n\n')
f.write('			<h1>Champion Grid</h1> <!-- titles -->\n')
f.write('			<h2>Every champ in League of Legends</h2>\n\n')
f.write('			<ul id="navigation"><!-- the navigation menu -->\n')
f.write('				<!-- a few navigation buttons -->\n')

for champ in champs:

	f.write('				<li><a href="/champion.php?champion=' + champ + '">' + data['keys'][champ] + '</a></li>\n')

f.write('			</ul>\n\n')
f.write('			<div class="clear"></div><!-- the above links are floated - we have to use the clearfix hack -->\n')
f.write('		</div>\n')
f.write('	</div>\n')
f.write('</body>\n')
f.write('</html>\n')
