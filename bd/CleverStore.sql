--
-- PostgreSQL database dump
--

-- Dumped from database version 11.1
-- Dumped by pg_dump version 11.1

-- Started on 2018-12-17 00:12:07

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 197 (class 1259 OID 16593)
-- Name: reg_users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.reg_users (
    id integer NOT NULL,
    name character varying(15) NOT NULL,
    first_name character varying(15),
    email character varying(30) NOT NULL,
    password character varying(20) NOT NULL,
    tel character varying(16),
    img character varying(20)
);


ALTER TABLE public.reg_users OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 16591)
-- Name: User_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."User_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."User_id_seq" OWNER TO postgres;

--
-- TOC entry 2829 (class 0 OID 0)
-- Dependencies: 196
-- Name: User_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."User_id_seq" OWNED BY public.reg_users.id;


--
-- TOC entry 199 (class 1259 OID 16609)
-- Name: art_store; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.art_store (
    sku integer NOT NULL,
    name character varying(20) NOT NULL,
    price integer NOT NULL,
    description character varying(120),
    rank integer
);


ALTER TABLE public.art_store OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 16607)
-- Name: art_store_sku_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.art_store_sku_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.art_store_sku_seq OWNER TO postgres;

--
-- TOC entry 2830 (class 0 OID 0)
-- Dependencies: 198
-- Name: art_store_sku_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.art_store_sku_seq OWNED BY public.art_store.sku;


--
-- TOC entry 2692 (class 2604 OID 16612)
-- Name: art_store sku; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.art_store ALTER COLUMN sku SET DEFAULT nextval('public.art_store_sku_seq'::regclass);


--
-- TOC entry 2691 (class 2604 OID 16596)
-- Name: reg_users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.reg_users ALTER COLUMN id SET DEFAULT nextval('public."User_id_seq"'::regclass);


--
-- TOC entry 2823 (class 0 OID 16609)
-- Dependencies: 199
-- Data for Name: art_store; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.art_store (sku, name, price, description, rank) FROM stdin;
1	Bolso Dama	250	Bolso para dama en varios colores	3
\.


--
-- TOC entry 2821 (class 0 OID 16593)
-- Dependencies: 197
-- Data for Name: reg_users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.reg_users (id, name, first_name, email, password, tel, img) FROM stdin;
1	Gustavo	Barrera	sugarskullgb@gmail.com	abretesesamo	57-30-29-36	img/U01
7	Alan	Mckay	alanmckay@hotmail.com	12345678	52-23-23-22	\N
8	Gary	Simon	garycoursera@gmail.com	45678912	56-89-45-48	\N
\.


--
-- TOC entry 2831 (class 0 OID 0)
-- Dependencies: 196
-- Name: User_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."User_id_seq"', 8, true);


--
-- TOC entry 2832 (class 0 OID 0)
-- Dependencies: 198
-- Name: art_store_sku_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.art_store_sku_seq', 1, true);


--
-- TOC entry 2694 (class 2606 OID 16598)
-- Name: reg_users User_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.reg_users
    ADD CONSTRAINT "User_pkey" PRIMARY KEY (id);


--
-- TOC entry 2698 (class 2606 OID 16614)
-- Name: art_store art_store_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.art_store
    ADD CONSTRAINT art_store_pkey PRIMARY KEY (sku);


--
-- TOC entry 2696 (class 2606 OID 16606)
-- Name: reg_users email; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.reg_users
    ADD CONSTRAINT email UNIQUE (email);


-- Completed on 2018-12-17 00:12:07

--
-- PostgreSQL database dump complete
--

