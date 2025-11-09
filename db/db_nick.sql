-- ======================================
--  CATEGORIAS
-- ======================================
CREATE TABLE `categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT,
  PRIMARY KEY (`id`)
);

-- ======================================
--  SUBCATEGORIAS
-- ======================================
CREATE TABLE `subcategories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idCategory` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subcategories_categories_idx` (`idCategory`),
  CONSTRAINT `fk_subcategories_categories` FOREIGN KEY (`idCategory`) REFERENCES `categories` (`id`)
);

-- ======================================
--  PRODUTOS
-- ======================================
CREATE TABLE `products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idCategory` INT NOT NULL,
  `idSubcategory` INT DEFAULT NULL,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `sku` VARCHAR(50) NOT NULL UNIQUE,

  -- Price (Value Object)
  `price_sale` DECIMAL(10,2) NOT NULL,
  `price_promotional` DECIMAL(10,2) DEFAULT NULL,
  `price_freight` DECIMAL(10,2) DEFAULT NULL,

  -- Stock (Value Object)
  `stock_quantity` INT NOT NULL DEFAULT 0,

  -- Admeasurement (Value Object)
  `weight` DECIMAL(10,3) DEFAULT NULL,
  `width` DECIMAL(10,3) DEFAULT NULL,
  `height` DECIMAL(10,3) DEFAULT NULL,
  `depth` DECIMAL(10,3) DEFAULT NULL,

  -- Technical Details (Value Object)
  `color` VARCHAR(100) DEFAULT NULL,
  `material` VARCHAR(150) DEFAULT NULL,

  `status` VARCHAR(20) NOT NULL DEFAULT 'active',

  PRIMARY KEY (`id`),
  KEY `fk_products_categories_idx` (`idCategory`),
  KEY `fk_products_subcategories_idx` (`idSubcategory`),
  CONSTRAINT `fk_products_categories` FOREIGN KEY (`idCategory`) REFERENCES `categories` (`id`),
  CONSTRAINT `fk_products_subcategories` FOREIGN KEY (`idSubcategory`) REFERENCES `subcategories` (`id`)
);

-- ======================================
--  IMAGENS DO PRODUTO
-- ======================================
CREATE TABLE `products_images` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idProduct` INT NOT NULL,
  `path` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_images_products_idx` (`idProduct`),
  CONSTRAINT `fk_products_images_products` FOREIGN KEY (`idProduct`) REFERENCES `products` (`id`)
);
