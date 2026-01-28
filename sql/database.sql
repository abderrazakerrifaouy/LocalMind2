
CREATE TYPE niveau_competense AS ENUM ('niveau 1', 'niveau 2', 'niveau 3');
CREATE TYPE user_role AS ENUM ('admin', 'formateur', 'etudiant');

CREATE TABLE users (
    id UUID PRIMARY KEY DEFAULT uuid_generate_v4(),
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password TEXT NOT NULL,
    role user_role NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE commpetonse (
    id UUID PRIMARY KEY DEFAULT uuid_generate_v4(),
    name VARCHAR(255) NOT NULL
);

CREATE TABLE sprint (
    id UUID PRIMARY KEY DEFAULT uuid_generate_v4(),
    nom VARCHAR(100) NOT NULL, -- ex: "Sprint 3"
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL
);

CREATE TABLE brief (
    id UUID PRIMARY KEY DEFAULT uuid_generate_v4(),
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    type VARCHAR(50),
    id_sprint UUID REFERENCES sprint(id) ON DELETE CASCADE
);




CREATE TABLE class (
    id UUID PRIMARY KEY DEFAULT uuid_generate_v4(),
    name VARCHAR(100) NOT NULL,
    anne_detudiant INTEGER DEFAULT 2026,
    is_termine BOOLEAN DEFAULT FALSE,
    max_etudiants INTEGER DEFAULT 25 -- Contrainte métier : 25 max
);

-- Table de liaison Multi-Formateurs (Principal + Htiyate)
CREATE TABLE formateur_classes (
    id_formateur UUID REFERENCES users(id) ON DELETE CASCADE,
    id_class UUID REFERENCES class(id) ON DELETE CASCADE,
    is_principal BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (id_formateur, id_class)
);

-- Table de liaison Étudiants
CREATE TABLE etudiants_class (
    id_etudiant UUID REFERENCES users(id) ON DELETE CASCADE,
    id_class UUID REFERENCES class(id) ON DELETE CASCADE,
    PRIMARY KEY (id_etudiant, id_class)
);



CREATE TABLE rondu (
    id UUID PRIMARY KEY DEFAULT uuid_generate_v4(),
    id_etudiant UUID REFERENCES users(id),
    id_brief UUID REFERENCES brief(id),
    lien_rendu TEXT,
    date_soumission TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE valide_competonse (
    id UUID PRIMARY KEY DEFAULT uuid_generate_v4(),
    id_etudiant UUID REFERENCES users(id),
    id_competense UUID REFERENCES commpetonse(id),
    niveau niveau_competense NOT NULL,
    is_valid BOOLEAN DEFAULT FALSE,
    id_formateur_validateur UUID REFERENCES users(id)
);

CREATE TABLE mssage (
    id UUID PRIMARY KEY DEFAULT uuid_generate_v4(),
    message TEXT NOT NULL,
    id_expediteur UUID REFERENCES users(id),
    id_rondu UUID REFERENCES rondu(id)
);




-- select s.nom , c.name , sc.niveau from sprint s 
-- join sprint_competence sc on s.id = sc.id_sprint 
-- join commpetonse c on c.id = sc.id_competense ;




