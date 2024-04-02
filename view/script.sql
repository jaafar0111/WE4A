    CREATE DATABASE netatlas;

    USE netatlas;

    CREATE TABLE role (
        id_role int primary key auto_increment, 
        libelle varchar(50)
    );

    CREATE TABLE user (
        id_user int primary key auto_increment, 
        firstname varchar(50), 
        lastname varchar(50), 
        phone varchar(13) UNIQUE, 
        username varchar(10), 
        email varchar(30), 
        password varchar(50) not null, 
        selfIntro varchar(500), 
        avatar varchar(500), 
        coverPhoto varchar(100) not null, 
        bannedForever boolean, 
        bannedTemporarly boolean, 
        connected boolean
    );

    CREATE TABLE permission (
        id_permission int primary key auto_increment, 
        libelle_permission varchar(10)
    );

    CREATE TABLE role_permission (
        id_role int, 
        id_permission int,
        constraint fk_role_id foreign key (id_role) references role (id_role), 
        constraint fk_permission_id foreign key (id_permission) references permission(id_permission), 
        constraint pk_role_permission primary key (id_role, id_permission)
    );

    create table tag (
        id_tag int PRIMARY KEY auto_increment, 
        name varchar(30)
    );

    CREATE TABLE media (
        id_media int PRIMARY KEY auto_increment, 
        libelle_media VARCHAR(50)
    );

    CREATE TABLE post (
        id_post int primary key auto_increment, 
        content_post varchar(255), 
        post_date date, 
        likes int, 
        reposts int, 
        views int, 
        removed boolean
    );

    CREATE TABLE post_media (
        id_post_media int PRIMARY KEY auto_increment, 
        date_post_media DATE, 
        id_media int, 
        id_post int, 
        constraint fk_media_id FOREIGN KEY (id_media) REFERENCES media (id_media), 
        constraint fk_post_id FOREIGN KEY (id_post) REFERENCES post (id_post)
    );

    CREATE TABLE post_tag (
        id_post int, 
        id_tag int, 
        constraint fk_tag FOREIGN KEY (id_tag) REFERENCES tag (id_tag), 
        constraint fk_post FOREIGN KEY (id_post) REFERENCES post (id_post),
        constraint pk_post_tag PRIMARY KEY (id_post, id_tag)
    );

    CREATE TABLE post_view (
        id_post_view int primary key auto_increment, 
        id_post int, 
        id_user int, 
        viewDate date, 
        constraint fk_post_view_id foreign key (id_post) references post (id_post), 
        constraint fk_post_user_id foreign key (id_user) references user (id_user)
    );

    CREATE TABLE post_like (
        id_post_like int primary key auto_increment, 
        id_post int, 
        id_user int, 
        likeDate date, 
        constraint fk_post_like_id foreign key (id_post) references post (id_post), 
        constraint fk_user_like_id foreign key (id_user) references user (id_user)
    );

    CREATE TABLE bookmark (
        id_bookmark int primary key auto_increment, 
        id_post int, 
        id_user int, 
        bookmarkedDate date, 
        constraint fk_post_bookmark_id foreign key (id_post) references post (id_post), 
        constraint fk_user_bookmark_id foreign key (id_user) references user (id_user)
    );

    CREATE TABLE interdictionType (
        code varchar(20) primary key, 
        libelle VARCHAR(20)
    );

    CREATE TABLE interdiction (
        id_interdiction int primary key auto_increment, 
        message varchar(20), 
        actif boolean, 
        interdictionDate date, 
        interdictionTypeCode varchar(20), 
        id_user int NULL, 
        constraint fk_interdiction_code foreign key (interdictionTypeCode) REFERENCES interdictionType(code), 
        constraint fk_user_interdiction_id FOREIGN KEY (id_user) REFERENCES user (id_user)
    );

    CREATE TABLE notification (
        id_notification int primary key auto_increment, 
        content_notification varchar(50) not null, 
        notificationDate date, 
        is_notification_read boolean, 
        id_post int, 
        id_user int, 
        id_interdiction int NULL, 
        constraint fk_post_notification_id Foreign Key (id_post) REFERENCES post (id_post), 
        constraint fk_user_notification_id FOREIGN KEY (id_user) REFERENCES user (id_user), 
        constraint fk_interdiction_notification_id FOREIGN KEY (id_interdiction) REFERENCES interdiction (id_interdiction)
    );

    CREATE TABLE sensitive_word (
        id_sensitive_word int PRIMARY KEY auto_increment, 
        libelle_sensitive_word VARCHAR(50)
    );