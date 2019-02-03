CREATE TABLE public."Product"
(
    "SKU" bigint NOT NULL,
    "ProductName" character varying(32) COLLATE pg_catalog."default",
    "Description" text COLLATE pg_catalog."default",
    CONSTRAINT "Product_pkey" PRIMARY KEY ("SKU")
)
CREATE TABLE public."Voters"
(
    "VoterName" character varying(50) COLLATE pg_catalog."default" NOT NULL,
    "VoterAge" bigint,
    "VoterAddress" text COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT "Voters_pkey" PRIMARY KEY ("VoterAddress")
)
CREATE TABLE public."Votes"
(
    "ProName" character varying(32) COLLATE pg_catalog."default" NOT NULL,
    "VoteCount" bigint,
    "CountLike" bigint,
    "CountDislike" bigint,
    "CountProductUnknown" bigint,
    "SKU" bigint NOT NULL,
    CONSTRAINT "ProductSKUs" FOREIGN KEY ("SKU")
        REFERENCES public."Product" ("SKU") MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public."Product"
    OWNER to esyjusnapmhrjb;