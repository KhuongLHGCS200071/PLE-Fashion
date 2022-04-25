var db = window.openDatabase("mangel_shop", "1.0", "IMA Shop", 200000);


function log(type, message) {
  var current_time = new Date();
  console.log(`${current_time} [${type}] ${message}`);
}

function fetch_transaction_success(name) {
  log(`INFO`, `Insert "${name}" successfully.`);
}

function table_transaction_success(table) {
  log(`INFO`, `Create table "${table}" successfully.`);
}

function transaction_error(tx, error) {
  log(`ERROR`, `SQL Error ${error.code}: ${error.message}.`);
}

function initialize_database() {
  db.transaction(function (tx) {
    var query = `CREATE TABLE IF NOT EXISTS city (
        id INTEGER PRIMARY KEY,
        name TEXT UNIQUE NOT NULL
      )`;

    tx.executeSql(query, [], table_transaction_success(`city`), transaction_error);

    query = `CREATE TABLE IF NOT EXISTS district (
        id INTEGER PRIMARY KEY,
        name TEXT NOT NULL,
        city_id INTEGER NOT NULL,
        FOREIGN KEY (city_id) REFERENCES city(id)
      )`;

    tx.executeSql(query, [], table_transaction_success(`district`), transaction_error);

    query = `CREATE TABLE IF NOT EXISTS ward (
        id INTEGER PRIMARY KEY,
        name TEXT NOT NULL,
        district_id INTEGER NOT NULL,
        FOREIGN KEY (district_id) REFERENCES district(id)
      )`;

    tx.executeSql(query, [], table_transaction_success(`ward`), transaction_error);

    query = `CREATE TABLE IF NOT EXISTS account (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT UNIQUE NOT NULL,
        password TEXT NOT NULL,
        first_name TEXT NULL,
        last_name TEXT NULL,
        birthday REAL NULL,
        phone TEXT NULL,
        street TEXT NULL,
        ward_id INTEGER NULL,
        district_id INTEGER NULL,
        city_id INTEGER NULL,
        status INTEGER NOT NULL,
        FOREIGN KEY (city_id) REFERENCES city(id)
      )`;

    tx.executeSql(query, [], table_transaction_success(`account`), transaction_error);

    var query = `CREATE TABLE IF NOT EXISTS category (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT UNIQUE NOT NULL,
        description TEXT NULL,
        parent_id INTEGER NULL,
        FOREIGN KEY (parent_id) REFERENCES category(id)
      )`;

    tx.executeSql(query, [], table_transaction_success(`category`), transaction_error);

    var query = `CREATE TABLE IF NOT EXISTS product (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT UNIQUE NOT NULL,
        description TEXT NULL,
        price REAL NOT NULL,
        category_id INTEGER NULL,
        img TEXT NULL,
        FOREIGN KEY (category_id) REFERENCES category(id)
      )`;

    tx.executeSql(query, [], table_transaction_success(`product`), transaction_error);

    var query = `CREATE TABLE IF NOT EXISTS cart (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        account_id INTEGER NOT NULL,
        product_id INTEGER NOT NULL,
        quantity INTEGER NOT NULL,
        FOREIGN KEY (account_id) REFERENCES account(id),
        FOREIGN KEY (product_id) REFERENCES product(id)
      )`;

    tx.executeSql(query, [], table_transaction_success(`cart`), transaction_error);
  });
}

function fetch_database() {
  db.transaction(function (tx) {
    var query = `INSERT INTO category (name, description) VALUES(?,?)`;
    tx.executeSql(query, ["Shirt", "Ao"], fetch_transaction_success("Shirt"), transaction_error);
    tx.executeSql(query, ["Sock", "Vo"], fetch_transaction_success("Sock"), transaction_error);
    tx.executeSql(query, ["Pants", "Quan"], fetch_transaction_success("Pants"), transaction_error);
    tx.executeSql(query, ["Jacket", "Ao Khoac"], fetch_transaction_success("Jacket"), transaction_error);

    query = `INSERT INTO account (username, password, status) VALUES (?,?,1)`;
    tx.executeSql(query, ["ilehuukhuong@gmail.com", "190202"], fetch_transaction_success("ilehuukhuong@gmail.com"), transaction_error);

    query = `INSERT INTO product (name, img, price, category_id) VALUES(?,?,?,?)`;
    tx.executeSql(query, ["Varsity Basic Degrey", "img/product/product1.jpg", 450000, 1], fetch_transaction_success("Product 01"), transaction_error);
    tx.executeSql(query, ["Degrey Pocket Jacket", "img/product/product2.jpg", 450000, 4], fetch_transaction_success("Product 02"), transaction_error);
    tx.executeSql(query, ["Basic Degrey Black", "img/product/product3.jpeg", 190000, 1], fetch_transaction_success("Product 03"), transaction_error);
    tx.executeSql(query, ["Basic Degrey White", "img/product/product4.jpeg", 190000, 1], fetch_transaction_success("Product 04"), transaction_error);
    tx.executeSql(query, ["Basic Degrey Red", "img/product/product5.jpg", 190000, 1], fetch_transaction_success("Product 05"), transaction_error);
    tx.executeSql(query, ["AXK Black", "img/product/product6.jpg", 250000, 1], fetch_transaction_success("Product 06"), transaction_error);
    tx.executeSql(query, ["AXK White", "img/product/product7.jpg", 250000, 1], fetch_transaction_success("Product 07"), transaction_error);
    tx.executeSql(query, ["Degrey Wax - QDW", "img/product/product8.jpg", 350000, 3], fetch_transaction_success("Product 08"), transaction_error);
    tx.executeSql(query, ["Black Short Jean", "img/product/product9.jpeg", 290000, 3], fetch_transaction_success("Product 09"), transaction_error);
    tx.executeSql(query, ["Blue Short Jean", "img/product/product10.jpeg", 290000, 3], fetch_transaction_success("Product 10"), transaction_error);
    tx.executeSql(query, ["Black Degrey Pant", "img/product/product11.jpg", 280000, 3], fetch_transaction_success("Product 10"), transaction_error);
    tx.executeSql(query, ["AKVT", "img/product/product12.jpeg", 450000, 4], fetch_transaction_success("Product 10"), transaction_error);
  });
}

