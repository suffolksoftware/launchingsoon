CREATE TABLE IF NOT EXISTS launchingsoon_users (
  id                        INTEGER UNSIGNED    NOT NULL AUTO_INCREMENT

, email                     VARCHAR(255)        NOT NULL

, first_name                VARCHAR(255)        NULL
, last_name                 VARCHAR(255)        NULL

, updated_at                DATETIME            NULL
, created_at                DATETIME            NULL

, PRIMARY KEY               (id) 
, UNIQUE KEY                (email)
);
