// real tables

create table Menu_Item_Recipe(MIR_ID Int, ING_ID int REFERENCES Ingredients(ING_ID), Menu_ID int REFERENCES Menu_Item(Menu_ID));
create table Ingredients(ING_ID int primary key, ING_Name text);
create table Menu_Item(Menu_ID Int primary key, Menu_Name text);
CREATE TABLE intake_recipes( ir_id SERIAL PRIMARY KEY, recipe_suggestion_name text, recipe_ingredients text);

// All the insert statements.

INSERT INTO ingredients (ing_id, ing_name)
VALUES
   (0, milk),
   (1, vinegar),
   (2, flour),
   (3, sugar),
   (4, baking powder),
   (5, baking soda),
   (6, salt),
   (7, egg),
   (8, butter),
   (9, sausage),
   (10, beef),
   (11, onion),
   (12, garlic),
   (13, tomatoes),
   (14, white sugar),
   (15, basil leaves),
   (16, fennel seeds),
   (17, Italian seasoning salt),
   (18, black pepper),
   (19, parsley),
   (20, lasagna noodles),
   (21, ricotta cheese),
   (22, mozzarella cheese),
   (23, Parmesan cheese),
   (24, Potatoes),
   (25, celery),
   (26, Ham),
   (27, white pepper) 
   ;

INSERT INTO menu_item (menu_id, menu_name, menu_img) VALUES (0, 'Fluffy Pancakes', 'food_pics/ham-potato-soup.jpg');

INSERT INTO menu_item (menu_id, menu_name, menu_img) VALUES (1, 'World''s Best Lasagna', 'food_pics/best-lasagna.jpg');

INSERT INTO menu_item (menu_id, menu_name, menu_img) VALUES(2, 'Ham and Potato Soup', 'food_pics/fluffy-pancakes.jpg');


INSERT INTO menu_item_recipe (mir_id, menu_id, ing_id) VALUES


(	0	,	0	,	0	)	,
(	1	,	0	,	1	)	,
(	2	,	0	,	2	)	,
(	3	,	0	,	3	)	,
(	4	,	0	,	4	)	,
(	5	,	0	,	5	)	,
(	6	,	0	,	6	)	,
(	7	,	0	,	7	)	,
(	8	,	0	,	8	)	,
(	9	,	1	,	9	)	,
(	10	,	1	,	10	)	,
(	11	,	1	,	11	)	,
(	12	,	1	,	12	)	,
(	13	,	1	,	13	)	,
(	14	,	1	,	14	)	,
(	15	,	1	,	15	)	,
(	16	,	1	,	16	)	,
(	17	,	1	,	17	)	,
(	18	,	1	,	18	)	,
(	19	,	1	,	19	)	,
(	20	,	1	,	20	)	,
(	21	,	1	,	21	)	,
(	22	,	1	,	7	)	,
(	23	,	1	,	22	)	,
(	24	,	1	,	23	)	,
(	25	,	2	,	24	)	,
(	26	,	2	,	25	)	,
(	27	,	2	,	11	)	,
(	28	,	2	,	26	)	,
(	29	,	2	,	27	)	,
(	30	,	2	,	18	)	,
(	31	,	2	,	8	)	,
(	32	,	2	,	0	)	;





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






Did not create.
CREATE TABLE public."MenutoIngredients"
(
    "Food_Name" character varying(50) COLLATE pg_catalog."default" NOT NULL,
    "Food_ID" bigint,
    "Company_Name" character varying(50),
    CONSTRAINT "Food_Name_pkey" PRIMARY KEY ("Food_Name"),
    CONSTRAINT "Company_Name_pkey" FOREIGN KEY ("Comapny_Name")
)