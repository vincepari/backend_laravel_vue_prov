# Comandos GIT & (GITHUB)
## Descargar e Instalar GIT
- https://git-scm.com/
## Crear una cuenta en GITHUB  (Bitbucket, GitLab)
- https://github.com/

```
git config --global user.name "VINCE"
git config --global user.email "vincepari23@gmail.com"
```

-----
## Comandos iniciales
### inicializar GIT o clonar un repositorio

```
git init

git clone direccion_repositorio

```

### Referencia de repositorio Local con Remoto
- En necesario crear un nuevo repositorio en GITHUB
- Luego git remote add repositorio_remoto

 ```
 git remote add origin https://github.com/vincepari/backend_laravel_vue_prov.git
 ```
----
## Comandos para publicar nuevos cambios al repositorio remoto

```
git add .
git commit -m "Autenticacion con Laravel Api Rest"
git push origin  master
```
