# symfony_excel

## Prerrequisitos:
- Antes de hacer funcionar este proyecto, primero debe cargar la base de datos `test_altos_ejecutivos` utilizando el script de Python de [este repositorio](https://github.com/DeusCL/pyexcel)


## Instalación:
1) Clonar repositorio: `git clone https://github.com/DeusCL/symfony_excel.git`
2) Ir al directorio del proyecto: `cd symfony_excel`
3) Instalar dependencias: `composer install`
4) Configurar `DATABASE_URL` en el archivo `.env`. La base de datos configurada debe ser `test_altos_ejecutivos`
5) Iniciar servidor local: `symfony serve`
6) Ir a 127.0.0.1:8000/cargos


## Uso:
1) En 127.0.0.1:8000/cargos debería aparecer el select con los cargos.
2) Seleccione algún cargo para ver su Renta Bruta.

