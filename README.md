# niagahosterciapp

# Read me for Docker
1. Download first the code repository
2. Run on your terminal -> docker build -t niagahoster .
3. Run on your terminal -> docker container create --name niagaserver -p 8005:80 niagahoster
4. Run on your terminal -> docker container start niagaserver
5. On the URL Browser for import database please type -> localhost:8005/phpmyadmin
6. Create database with name "niagahoster" and import the niagahoster.sql
7. If you can access niagahoster web, please type on the URL browser localhost:8005/niagahoster
