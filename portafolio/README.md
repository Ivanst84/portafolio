## Portafolio
Este es un proyecto colaborativo para crear un portafolio. Por favor, trabaja en tus propias ramas para hacer tus cambios y asegúrate de revisar y probar antes de hacer merge a la rama principal.

## Instrucciones para trabajar en tus ramas
- Clona el repositorio a tu máquina local.
- Crea una nueva rama con un nombre descriptivo de la tarea que vas a realizar: git checkout -b <nombre-de-tu-rama>.
- Realiza los cambios necesarios y haz los commits correspondientes: git add . para agregar los cambios y git commit -m "<mensaje-del-commit>" para hacer el commit.
- Sincroniza tu rama con la rama principal del repositorio: git fetch origin main && git rebase origin/main.
- Resuelve cualquier conflicto que surja durante el rebase. Para hacerlo, abre los archivos en conflicto, edita el código para solucionar el conflicto y haz git add <archivo> para marcar el conflicto como resuelto.
- Una vez que no haya conflictos, haz push de tus cambios a la rama remota: git push -u origin <nombre-de-tu-rama>.

 ## Instrucciones para hacer merge
- Abre el Visual Studio Code y elige la opción "Source Control" en la barra lateral izquierda.
- Asegúrate de que estás en la rama correcta.
- Haz clic en el botón "Fetch" para traer los últimos cambios del repositorio.
- Haz clic en el botón "Merge" y selecciona la rama que deseas fusionar con la rama actual.
- Resuelve cualquier conflicto que surja durante el merge.
- Una vez que no haya conflictos, haz clic en el botón "Commit" y escribe un mensaje descriptivo para el merge.
- Haz push de los cambios fusionados a la rama remota.

 ## Instrucciones para agregar código a la rama principal
- Cuando la rama esté lista para agregar al repositorio principal, crea una solicitud de merge ("Pull Request") en GitHub.
- Asegúrate de que la solicitud de merge incluya una descripción detallada de los cambios realizados y los problemas que resuelve.
- Espera a que otros miembros del equipo revisen y aprueben la solicitud de merge.
- Una vez que la solicitud de merge ha sido aprobada, haz clic en el botón "Merge" en GitHub para fusionar la rama con la rama principal.
