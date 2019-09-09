#!bin/python

import sqlite3
from sqlite3 import Error

def sql_connection():
    try:

       conn = sqlite3.connect('mydb.db')
       return conn
    except Error:
       print(Error)

def sql_table(conn):
    mycursor = conn.cursor()

    mycursor.execute("CREATE TABLE cake(ID INT PRIMARY KEY, name text, email text, brought int, week int)")
    conn.commit()
conn = sql_connection()
sql_table(conn)
