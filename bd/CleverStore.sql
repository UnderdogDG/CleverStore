--
-- PostgreSQL database dump
--

-- Dumped from database version 11.1
-- Dumped by pg_dump version 11.1

-- Started on 2019-02-07 01:27:28

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
-- TOC entry 196 (class 1259 OID 24889)
-- Name: art_store; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.art_store (
    sku integer NOT NULL,
    name character varying(60) NOT NULL,
    brand character varying(20) NOT NULL,
    total_item integer NOT NULL,
    art_class character varying(10) NOT NULL,
    rank integer,
    price integer NOT NULL,
    description character varying(300),
    img character varying(50)
);


ALTER TABLE public.art_store OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 24892)
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
-- TOC entry 2829 (class 0 OID 0)
-- Dependencies: 197
-- Name: art_store_sku_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.art_store_sku_seq OWNED BY public.art_store.sku;


--
-- TOC entry 198 (class 1259 OID 24894)
-- Name: reg_users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.reg_users (
    id integer NOT NULL,
    name character varying(20) NOT NULL,
    last_name character varying(20),
    email character varying(40) NOT NULL,
    password character varying(30) NOT NULL,
    address character varying(100),
    tel character varying(20),
    img character varying(20),
    fav character varying(50)
);


ALTER TABLE public.reg_users OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 24897)
-- Name: reg_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.reg_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.reg_user_id_seq OWNER TO postgres;

--
-- TOC entry 2830 (class 0 OID 0)
-- Dependencies: 199
-- Name: reg_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.reg_user_id_seq OWNED BY public.reg_users.id;


--
-- TOC entry 2691 (class 2604 OID 24899)
-- Name: art_store sku; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.art_store ALTER COLUMN sku SET DEFAULT nextval('public.art_store_sku_seq'::regclass);


--
-- TOC entry 2692 (class 2604 OID 24900)
-- Name: reg_users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.reg_users ALTER COLUMN id SET DEFAULT nextval('public.reg_user_id_seq'::regclass);


--
-- TOC entry 2820 (class 0 OID 24889)
-- Dependencies: 196
-- Data for Name: art_store; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.art_store (sku, name, brand, total_item, art_class, rank, price, description, img) FROM stdin;
1	Anillo con Diamante Canario	Karch	10	jwl	5	5000	Diamantes con brillo espectacular y certificado de origen irrefutable acompañan al hermoso y resplandeciente diamante canario de .74ct en este diseño en oro blanco de 18k que nuestros maestros joyeros han elaborado con creatividad y mano de obra sin igual.	anillo_canario.png
2	Anillo Oro Rosa y Diamantes Negros	Karch	5	jwl	3	15000	Diseño en oro rosa de 14k y diamantes negros de .32ct que nuestros maestros joyeros han elaborado a mano con absoluta perfección.	anillo_ororosa.png
3	Anillo Ice Cube Diamonds	Chopard	15	jwl	8	6000	Icónico y urbano, el diseño geométrico andrógino de este anillo Ice Cube de oro blanco de 18k completamente engastado de diamantes transmite modernidad con un toque contemporáneo.	anillo_icecube.png
4	Anillo Happy Curves	Chopard	10	jwl	7	6000	Inspirado por espumosas gotas de agua en una cascada, los tres diamantes se mueven libremente dentro de dos cristales de zafiro en este anillo de círculo de 18k en oro blanco.	anillo_happy.png
5	Anillo Wabba	Wabba	5	jwl	4	16000	Diseño en oro rosa de 14k con incrustaciones de diamantes con brillo espectacular.	anillo_wabba.png
6	Anillo Amatista	K DI KUORE	6	jwl	6	25000	Anillo de la colección Color, en oro rosa de 18k con diamantes y amatista.	anillo_amatista.png
7	Aretes Amatista	K DI KUORE	6	jwl	6	8500	Absolutamente femeninos.  De la colección Color, en oro de 18k con diamantes y amatistas.	aretes_amatista.png
8	Aretes Happy Emotions	Chopard	10	jwl	5	8500	Aretes en oro blanco de 18k de la colección Happy Emotions combina el estilo femenino con la excelencia de la joyería;  tienen seis diamantes que bailan libremente entre dos cristales de zafiro.	aretes_happy.png
9	Aretes Very Chopard Rose Gold Hearts	Chopard	20	jwl	8	8300	Aretes de la línea Very Chopard, están diseñados en oro rosa de 18k, con un total de diamantes de 0.68ct en el bisel y en bailando en el centro de cada corazón.	aretes_rosegold.png
10	Aretes Happy Diamonds	Chopard	10	jwl	7	11000	Aretes en oro blanco de 18k, con los clásicos diamantes móviles de Chopard.	aretes_happydiamond.png
11	Bolso Sevilla Caviare Cognac	Chopard	20	acc	9	1500	La bolsa Sevilla combina una excelente artesanía italiana con un diseño contemporáneo. Fabricada en piel color coñac con la impresión caviar, esta bolsa es sofisticada, femenina y moderna.	bolso_sevillacaviare.png
12	Reloj de bolsillo Viceroy	Viceroy	10	acc	5	11500	Reloj de bolsillo en plateado transparente, cerrado se ve maquinaria. Cadena para colgar con cierre de reasa de seguridad esfera con bisel en negro con números en romano.	reloj_viceroy.png
13	Reloj de Pulsera Viceroy Mujer	Viceroy	10	acc	8	10500	Reloj Viceroy para mujer en acero tipo joya, bisel fino y elegante en acero cuajado de piedras, esfera en blanco con cuatro piedras.	reloj_viceroymujer.png
14	Reloj Viceroy de Cerámica Mujer	Viceroy	5	acc	7	6500	Reloj Viceroy cuadrado para mujer en acero y cerámica blanca, con esfera en blanco e indices y agujas en plateado.	reloj_viceroyceramica.png
15	Reloj Mayfair Silver Black	Millner	6	acc	8	6200	Reloj de Movimiento de Cuarzo, Caja de Aleación, Correa de Acero Inoxidable.	reloj_miltnersilverblack.png
16	Brazalete Lambeth Rose Gold	Millner	10	acc	4	2200	Brazalete en Acero Inoxidable Color Oro Rosa y Cierre Abierto.	brazalete_lambeth.png
17	Urban Twist	Luis Vuitton	12	sho	5	12000	Una actualización estilizada del clasico stiletto, los Urban Twist vienen en suave piel de becerro adornada con una impresionante puntera de metal en tono plateado	zapato_LVtwist.png
18	Zapatillas Cherie LV	Luis Vuitton	15	sho	7	15000	Con sus líneas elegantes, tacón de aguja y puntera puntiaguda, la bomba Chérie es un estilo atemporal femenino, que se combina con la combinación de cuero de becerro negro y el icónico Monogram de Louis Vuitton.	zapatillas_cherie.png
19	Zapatillas Heartbreaker LV	Luis Vuitton	8	sho	7	11200	Zapatos de tacón alto adornados con un accesorio en V de color dorado.	zapatillas_heartbreaker.png
20	Zapatillas Madeleine LV	Luis Vuitton	13	sho	6	13200	La icónica Zapatilla de Madeleine de Louis Vuitton se reinterpreta en piel de cabra de gamuza aterciopelada y tacón de altura media.	zapatillas_madeleine.png
\.


--
-- TOC entry 2822 (class 0 OID 24894)
-- Dependencies: 198
-- Data for Name: reg_users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.reg_users (id, name, last_name, email, password, address, tel, img, fav) FROM stdin;
1	Gustavo	Barrera	sugarskullgb@gmail.com	12345678	\N	51-12-12-12	092A039.jpg	12
\.


--
-- TOC entry 2831 (class 0 OID 0)
-- Dependencies: 197
-- Name: art_store_sku_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.art_store_sku_seq', 20, true);


--
-- TOC entry 2832 (class 0 OID 0)
-- Dependencies: 199
-- Name: reg_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.reg_user_id_seq', 1, true);


--
-- TOC entry 2694 (class 2606 OID 24902)
-- Name: art_store art_store_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.art_store
    ADD CONSTRAINT art_store_pkey PRIMARY KEY (sku);


--
-- TOC entry 2696 (class 2606 OID 24904)
-- Name: reg_users email; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.reg_users
    ADD CONSTRAINT email UNIQUE (email);


--
-- TOC entry 2698 (class 2606 OID 24906)
-- Name: reg_users reg_user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.reg_users
    ADD CONSTRAINT reg_user_pkey PRIMARY KEY (id);


-- Completed on 2019-02-07 01:27:28

--
-- PostgreSQL database dump complete
--

