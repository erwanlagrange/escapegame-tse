# -*- coding: utf-8 -*-
"""
Created on Tue Jun  4 15:02:18 2019

@author: samuelogier
"""

import os
import csv
import random


#TriGroupe


    
def creation_equipes(nb_jpe, L):
    equipes = []
    random.shuffle(L)
    taille = len(L)
    for i in range (0, taille%nb_jpe+1):
        random.shuffle(L)
        equipes.append(L[:nb_jpe])
        del L[:nb_jpe]
    return equipes
        
    
#MAIN

#Création du fichier dans lequel seront les différents groupes
fichier1 = open("groupes.csv", "w")

#Traitement du fichier récupéré sur WordPress
with open("form.csv", "r") as f_input:              
    csv_input = csv.DictReader(f_input)

    participants = []

    nb_participant = -1
    for line in f_input:
        nb_participant += 1
    f_input.seek(0)
    nb_equipe = round(nb_participant / 5)
    print(nb_equipe)

    for row in csv_input:
        n = row['#']
        date = row['Date de soumission']
        nom = row['Nom']
        prenom = row['Prénom']
        mail = row ['Email']
        promotion = row ['Promotion']

        personne = nom+ ' ' +prenom+ ', @ = ' +mail

        participants.append(personne)

	#Classement des filières selon le nombre de personne
    equipes = []
    nb_jpe = 5

    #case = verification_filieres(cpt_fise,cpt_iram,cpt_fisa,cpt_citise)
    equipes = creation_equipes(nb_jpe, participants)

    print(equipes)
    for i in range (0, nb_equipe):
        fichier1.write(str(equipes[i]))
        fichier1.write('\n')
        fichier1.write('\n')
    
    fichier1.close()