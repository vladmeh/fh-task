DELETE FROM USERS;
DELETE FROM USE_CASE;

INSERT INTO USERS (ID, FULL_NAME, TELEPHONE, SEX, BIRTHDAY) VALUES (1, 'Иванов Иван', '333-22-33', 'мужской', '1974-09-21');
INSERT INTO USERS (ID, FULL_NAME, TELEPHONE, SEX, BIRTHDAY) VALUES (2, 'Петров Петр', '222-22-11', 'мужской', '1977-12-10');
INSERT INTO USERS (ID, FULL_NAME, TELEPHONE, SEX, BIRTHDAY) VALUES (3, 'Иванова Елена', '333-22-11', 'женский', '1980-05-14');
INSERT INTO USERS (ID, FULL_NAME, TELEPHONE, SEX, BIRTHDAY) VALUES (4, 'Сидоров Сергей', '333-33-22', 'мужской', '1982-09-16');
INSERT INTO USERS (ID, FULL_NAME, TELEPHONE, SEX, BIRTHDAY) VALUES (5, 'Васильева Ольга', '444-44-11', 'женский', '1986-04-26');
INSERT INTO USERS (ID, FULL_NAME, TELEPHONE, SEX, BIRTHDAY) VALUES (6, 'Потапов Евгений', '333-22-00', 'мужской', '1994-02-18');
INSERT INTO USERS (ID, FULL_NAME, TELEPHONE, SEX, BIRTHDAY) VALUES (7, 'Маланов Назар', '555-22-11', 'мужской', '1997-02-10');
INSERT INTO USERS (ID, FULL_NAME, TELEPHONE, SEX, BIRTHDAY) VALUES (8, 'Ягешева Валентина', '444-22-33', 'женский', '1999-06-14');
INSERT INTO USERS (ID, FULL_NAME, TELEPHONE, SEX, BIRTHDAY) VALUES (9, 'Левченко Юлий', '111-22-33', 'мужской', '1999-11-16');
INSERT INTO USERS (ID, FULL_NAME, TELEPHONE, SEX, BIRTHDAY) VALUES (10, 'Забабурин Иван', '222-22-33', 'мужской', '2000-01-21');

INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (1, 1, 'Бег', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (2, 1, 'Ходьба', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (3, 1, 'Приседания', current_timestamp);

INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (4, 2, 'Бег', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (5, 2, 'Подтягивание', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (6, 2, 'Жим штангой', current_timestamp);

INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (7, 3, 'Приседания', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (8, 3, 'Бег', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (9, 3, 'Прыжки', current_timestamp);

INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (10, 4, 'Ходьба', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (11, 4, 'Отжимание', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (12, 4, 'Бег', current_timestamp);

INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (13, 5, 'Прыжки', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (14, 5, 'Поднятие гантелей', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (15, 5, 'Бег', current_timestamp);

INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (16, 6, 'Плавание', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (17, 6, 'Ходьба', current_timestamp);

INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (18, 7, 'Прыжки', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (19, 7, 'Бег', current_timestamp);

INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (20, 8, 'Приседания', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (21, 8, 'Отжимания', current_timestamp);

INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (22, 9, 'Жим штангой', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (23, 9, 'Подтягивание', current_timestamp);

INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (24, 10, 'Прыжки на батуте', current_timestamp);
INSERT INTO USE_CASE (ID, USER_ID, NAME, USE_CASE_TIME) VALUES (25, 10, 'Бег', current_timestamp);