<?php

return [
    'single'                => 'Producto',
    'plural'                => 'Productos',
    'related'               => 'PRODUCTOS RELACIONADOS',
    'list resource'         => 'Listar productos',
    'create resource'       => 'Crear productos',
    'edit resource'         => 'Editar productos',
    'edit'         => 'Editar producto',
    'destroy resource'      => 'Eliminar productos',
    'bulkload import' => 'Importación masiva',
    'title'             => [
        'products'          => 'Productos',
        'create product'    => 'Crear un producto',
        'edit product'      => 'Editar un producto',
        'productDetails' => 'Detalles del Producto',
        'comments' => 'Comentarios',
        'related' => 'Relacionados',
        'reviews' => 'Revisiones',
    ],
    'button'            => [
        'create product'    => 'Crear un producto',
        'addToCartItemList' => "Comprar"
    ],
    'table' => [
        'title'                     => 'Titulo',
        'description'               => 'Descripción',
        'summary'                   => 'Sumario',
        'principal category'        => 'Categoria Principal',
        'categories'                => 'Categorias',
        'quantity'                  => 'Cantidad',
        'data'                      => 'Data',
        'links'                     => 'Vinculos',
        'options'                   => 'Opciones',
        'images'                    => 'Imagenes',
        'shipping'                  => 'Requiere Envío',
        'yes'                       => 'SI',
        'price'                     => 'Precio',
        'date available'            => 'Fecha de Disponibilidad',
        'weight'                    => 'Peso',
        'length'                    => 'Largo',
        'width'                     => 'Ancho',
        'height'                    => 'Alto',
        'substract'                 => 'Substraer del Stock',
        'minimum'                   => 'Cantidad minima que puede ser ordenada de este producto',
        'reference'                 => 'Referencia o Modelo',
        'featured image'            => 'Imagen Destacada',
        'available'                 => 'Disponibilidad',
        'discount'                  => 'Descuento',
        'required'                  => 'Requerido',
        'files'                     => 'Archivo',
        'txt'                       => 'Ingrese el valor del texto',
        'file product'              => 'Archivo referente al producto',
        'file product size max'     => 'Tamaño Máximo',
        'file product formats'      => 'Formatos',
        'subproducts'               => 'Sub Productos',
        'image'                     => 'Imágen',
        'related_products'          => 'Productos Relacionados',
        'search'                    => 'Buscar',
        'additional'                => 'Adicional',
        'purchasable'               => 'Producto Comprable',
        'freeshipping'              => 'Producto con Freeshipping',
        'order_weight'              => 'Peso de la Orden',
        'select option'             => 'Selecciona una opción',
        'manufacturer'              => 'Fabricante',
        'certificate'               => 'Certificado',
        'data_sheet'                => 'Ficha técnica',
        'points'                    => 'Puntos',
        'points win'                => 'Gana :points Puntos por comprar este producto',
    ],
    'categories'        => [
        'free_shipping'             => 'Productos con envío gratuito',
        'all_free_shipping'         => 'Todos los productos con envío gratuito...',
    ],
    'manufacturers'     => [
        'products_by_manufacturer'      => 'Productos por fabricante',
        'all_products_by_manufacturer'  => 'Todos los productos por fabricante...',
    ],
    'form' => [
      'available' => 'Disponibles',
      'outOfStock' => 'Producto Agotado'
    ],

    'messages'          => [
        'error delete product'      => 'El producto no pudo ser eliminado',
        'be_the_fist_review'        => 'SE EL PRIMERO EN DEJAR UNA RESEÑA DE ESTE PRODUCTO',
        'product_brochure'          => 'Panfleto del producto',
        'sending'                   => 'Enviando',
        'share'                     => 'COMPARTE',
        'tweet'                     => 'TWEET',
        'print'                     => 'IMPRIME',
        'business_days'             => '1-3 DIAS HABILES',
        'average_delivery'          => 'ENVIO PROMEDIO',
        'safe_secure'               => 'SEGURO Y CONFIABLE',
        'shopping'                  => 'COMPRANDO',
        'details'                   => 'DETALLES',
        'reviews'                   => 'RESEÑAS',
        'productSoldOut'      => 'Tu producto: <b>:name</b> se ha <b>agotado</b>',
        'productLowStock'      => 'Te queda(n) <b>:units</b> unidad(es) del producto <b>:name</b>',
    ],
    'validation'        => [
        'error delete'              => 'Error: No se puede eliminar  este producto porque tiene elementos asociados',
        'slug used'              => 'Este slug se encuentra en uso por otro producto',
    ],
    'gallery'           => [
        'title'         => 'Galeria del Producto',
        'add gallery'   => 'Agregar imagenes',
        'close'         => 'Cerrar',
        'ready'         => 'Completado',
        'edit gallery'  => 'Agregar / Editar / Eliminar Imagenes',
    ],
    'alerts'            => [
        'add'           => 'Añadir al Carrito',
        'add_to_wish_list' => 'Añadir a la Lista de Deseo',
        'add_cart'      => 'Producto agregado al carro',
        'no_add_cart'   => 'Producto no agregado al carro, por favor intente de nuevo',
        'no_more'       => 'No hay mas productos en inventario',
        'no_zero'       => 'El producto no puede ser menor a 0',
        'new'           => 'Nuevo',
        'sold out'      => 'Agotado',
        'productSoldOut'      => 'Producto Agotado',
        'productLowStock'      => 'Producto con bajo inventario',
        'withDiscount'       => 'DTO.',
        'beforeDiscount'     => 'Antes:',
    ],
    'bulkload'=>[
        'success migrate from product' => 'productos migrados con éxito, la actualización se realiza en unos instantes',
        'error in migrate from manufacturer'=>'error al migrar los fabricantes',
        'error in migrate from category'=>'error al migrar las Categorias',
        'error in migrate from page'=>'Error al realizar la migración de productos',
        'import'=>'Importar Productos',
        'export'=>'Exportar Productos',
        'title'=> 'Carga de Productos',
        'Select File'=>'Seleccionar Archivo de Migración',
        'Select Filecompatible files CSV, XLSX'=>'Seleccionar archivos compatibles con archivos CSV, XLSX',
        'Image folder path'=>'Ruta de la carpeta de imágenes',
        'Submit'=>'Importar'
    ]
];
