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
    "VoterAddress" text COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Voters_pkey" PRIMARY KEY ("VoterAddress")
)
CREATE TABLE public."Voters"
(
    "VoterName" character varying(50) COLLATE pg_catalog."default" NOT NULL,
    "VoterAge" bigint,
    "VoterAddress" text COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Voters_pkey" PRIMARY KEY ("VoterAddress")
)