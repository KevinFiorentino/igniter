PGDMP         6                v            login    9.6.4    10.0     M           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            N           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            O           1262    87957    login    DATABASE     �   CREATE DATABASE login WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Argentina.1252' LC_CTYPE = 'Spanish_Argentina.1252';
    DROP DATABASE login;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            P           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12387    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            Q           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    87960    usuario    TABLE     �   CREATE TABLE usuario (
    idusuario integer NOT NULL,
    useer character varying(25) NOT NULL,
    pass character varying(25) NOT NULL
);
    DROP TABLE public.usuario;
       public         postgres    false    3            �            1259    87958    usuario_idusuario_seq    SEQUENCE     w   CREATE SEQUENCE usuario_idusuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.usuario_idusuario_seq;
       public       postgres    false    186    3            R           0    0    usuario_idusuario_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE usuario_idusuario_seq OWNED BY usuario.idusuario;
            public       postgres    false    185            �           2604    87963    usuario idusuario    DEFAULT     h   ALTER TABLE ONLY usuario ALTER COLUMN idusuario SET DEFAULT nextval('usuario_idusuario_seq'::regclass);
 @   ALTER TABLE public.usuario ALTER COLUMN idusuario DROP DEFAULT;
       public       postgres    false    186    185    186            J          0    87960    usuario 
   TABLE DATA               2   COPY usuario (idusuario, useer, pass) FROM stdin;
    public       postgres    false    186   �       S           0    0    usuario_idusuario_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('usuario_idusuario_seq', 7, true);
            public       postgres    false    185            �           2606    87965    usuario usuario_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (idusuario);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public         postgres    false    186            J   F   x�3�LLO�+I�4.#�Ĕ��<��1�4.Ϙ��L9�S��� �&��F�&\�(�=... 4*�     