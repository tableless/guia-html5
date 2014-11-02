import urllib

url="http://localhost/html5/?chapter=%i"

allf=open("../all.html","w")

for i in range(26):
  allf.write(urllib.urlopen(url % i).read())

