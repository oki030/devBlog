CREATE TABLE IF NOT EXISTS admin(
    username TINYTEXT NOT NULL,	
    password TINYTEXT NOT NULL,
    contact_info TEXT NOT NULL,
    welcome_msg	TEXT NOT NULL
);

INSERT INTO `admin` VALUES ('admin', 'admin', 'Enter your contact information!', 'Enter your welcome message!');

CREATE TABLE IF NOT EXISTS projects(
    id INT NOT NULL AUTO_INCREMENT,
    name TINYTEXT NOT NULL,
    description TEXT NOT NULL,
    category TINYTEXT NOT NULL,
    img_name TINYTEXT NOT NULL,
    added_date DATE NOT NULL,
    source_link TINYTEXT NOT NULL,
    download_link TINYTEXT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS posts(
    p_id INT NOT NULL AUTO_INCREMENT,
    p_title TINYTEXT NOT NULL,
    p_content TEXT NOT NULL,  
    p_category TINYTEXT NOT NULL,     
    p_added_date DATE NOT NULL,    
    PRIMARY KEY (p_id)
);