CREATE TABLE public."Companies"
(
    "Company_Name" character varying(50) COLLATE pg_catalog."default" NOT NULL,
    "Company_ID" bigint
    CONSTRAINT "Company_pkey" PRIMARY KEY ("Company_Name")
)

CREATE TABLE public."Ingredients"
(
    "Ing_ID" character varying(50) COLLATE pg_catalog."default" NOT NULL,
    "Ing_Name" bigint,
    CONSTRAINT "ING_pkey" PRIMARY KEY ("Ing_Name")
)
CREATE TABLE public."MenutoIngredients"
(
    "Menu_ID" character varying(50) COLLATE pg_catalog."default" NOT NULL,
    "Ing_ID" bigint,
    CONSTRAINT "Menu_ID_pkey" PRIMARY KEY ("Menu_ID")
)




Did not create.
CREATE TABLE public."MenutoIngredients"
(
    "Food_Name" character varying(50) COLLATE pg_catalog."default" NOT NULL,
    "Food_ID" bigint,
    "Company_Name" character varying(50),
    CONSTRAINT "Food_Name_pkey" PRIMARY KEY ("Food_Name"),
    CONSTRAINT "Company_Name_pkey" FOREIGN KEY ("Comapny_Name")
)