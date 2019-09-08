#!bin/python

import sqlite3

conn = sqlite3.connect('mydb.db')
print ("Opened databa successfully")

# create table 

conn.execute("CREATE TABLE cake(ID INT PRIMARY KEY, name text, email text, brought int, week int)")

print ("Table Create succsessfylly")

conn.close()
