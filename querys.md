# Tables

## Users
    
```mysql
CREATE TABLE users (
    id integer primary key AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(255) NOT NULL
);
```

## Movies
    
```mysql
CREATE TABLE movies (
    id integer primary key AUTO_INCREMENT,
    user_id INTEGER,
    title VARCHAR(255),
    description TEXT,
    year integer,
    FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

# Seeders

## Users

```mysql
INSERT INTO users 
    (
        id, name, email, password
    ) 
VALUES 
    (1, 'Ygor Combi', 'ygor@combi.com', 'ygor@combi.com'), 
    (2, 'Fulano', 'fulano@dasilva.com', 'fulano@dasilva.com');
```

## Movies

```mysql
INSERT INTO movies 
    (
        id, title, description, year
    ) 
VALUES
    (1, 'The Lord of Rings', 'The Lord of the Rings is an epic high-fantasy novel. The story began as a sequel to Tolkien''s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work.', 1922),
    (2, 'The Hobbit', 'The Hobbit, or There and Back Again', 1937);
```