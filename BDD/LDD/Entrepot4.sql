TABLE Client:
- clé primaire: cli_num

TABLE commande: 
- clé primaire: com_num
- clé étrangère: cli_num

TABLE produit: 
- clé primaire: Pro_num

TABLE est_compose: 
- clé étrangère: com_num , pro_num 