// real tables

create table Menu_Item_Recipe(MIR_ID Int, ING_ID int REFERENCES Ingredients(ING_ID), Menu_ID int REFERENCES Menu_Item(Menu_ID));
create table Ingredients(ING_ID int primary key, ING_Name text);
create table Menu_Item(Menu_ID Int primary key, Menu_Name text);


// Tables I was going to use. 

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


create table Menu_Item_Recipe(MIR_ID Int, ING_ID int REFERENCES Ingredients(ING_ID), Menu_ID int REFERENCES Menu_Item(Menu_ID));
create table Ingredients(ING_ID int primary key, ING_Name text);
create table Menu_Item(Menu_ID Int primary key, Menu_Name text);




Did not create.
CREATE TABLE public."MenutoIngredients"
(
    "Food_Name" character varying(50) COLLATE pg_catalog."default" NOT NULL,
    "Food_ID" bigint,
    "Company_Name" character varying(50),
    CONSTRAINT "Food_Name_pkey" PRIMARY KEY ("Food_Name"),
    CONSTRAINT "Company_Name_pkey" FOREIGN KEY ("Comapny_Name")
)