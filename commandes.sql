--Commandes SQL

SELECT A.nom, jaquette, L.nom FROM `album` A, `label` L WHERE A.`label` = L.`id`;