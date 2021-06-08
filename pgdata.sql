DROP SCHEMA IF EXISTS public CASCADE;

CREATE SCHEMA public AUTHORIZATION postgres;

DROP TABLE IF EXISTS public.animals;
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS animals_id_seq;

-- Table Definition
CREATE TABLE public.animals (
    "id" int4 NOT NULL DEFAULT nextval('animals_id_seq'::regclass),
    "name" varchar NOT NULL,
    "type" varchar NOT NULL,
    "created_at" timestamp DEFAULT now(),
    PRIMARY KEY ("id")
);

DROP TABLE IF EXISTS public.users;
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS users_id_seq;

-- Table Definition
CREATE TABLE public.users (
    "id" int4 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
    "username" varchar NOT NULL,
    "password" varchar NOT NULL,
    PRIMARY KEY ("id")
);
