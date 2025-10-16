# infra/mariadb/Dockerfile — MariaDB Private Service for Render
FROM mariadb:11.4

# Environment vars (values come from render.yaml envVars)
# MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD, MYSQL_ROOT_PASSWORD
EXPOSE 3306

# Data is persisted via Render Disk mounted at /var/lib/mysql (configured in render.yaml)
