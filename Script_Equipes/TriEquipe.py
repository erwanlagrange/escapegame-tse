#Mettre en forme
#Voir si possible de créer un PDF et pas un fichier texte pour les équipes
#Generer un executable


import os
import csv
import random
import math

from tkinter import *
from tkinter.messagebox import *
from tkinter.filedialog import *
import tkinter.font as tkFont



def creation_equipes(nb_jpe, L):
    equipes = []
    random.shuffle(L)
    taille = len(L)
    
    if (taille%nb_jpe == 0):
        for i in range (0, int(taille/nb_jpe)):
            random.shuffle(L)
            equipes.append(L[:nb_jpe])
            del L[:nb_jpe]
        return equipes
    
    else:
        for i in range (0, math.floor(taille/nb_jpe)+1):
            random.shuffle(L)
            equipes.append(L[:nb_jpe])
            del L[:nb_jpe]
        return equipes


def opentexte(nb_jpe): #Bouton ouverture fichier texte
    filename = askopenfilename(title="Ouvrir votre document",filetypes=[('csv files','.csv'),('all files','.*')])
    f_input = open(filename, "r")
    
    f_temp = open("fichiertemp.txt", "w")
    
    csv_input = csv.DictReader(f_input)
    
    participants = []
    
    nb_participant = -1
    for line in f_input:
        nb_participant += 1
    nb_equipe=round(nb_participant / nb_jpe)

    f_input.seek(0)

    for row in csv_input:
        n = row['#']
        date = row['Date de soumission']
        nom = row['Nom']
        prenom = row['Prenom']
        mail = row ['Email']
        promotion = row ['Promotion']
    
        personne = nom+ ' ' +prenom+ ' (' +mail+')'
        participants.append(personne)
    
    
    #Classement des filières selon le nombre de personne
    equipes = []
    
    #case = verification_filieres(cpt_fise,cpt_iram,cpt_fisa,cpt_citise)
    equipes = creation_equipes(nb_jpe, participants)
    
    
    i = -1
    while (nb_equipe > 0):
        i += 1
        for j in range (0, 5):
            if (nb_equipe != 0):
                if (j==0):
                    k="Bleu"
                elif (j==1):
                    k="Rouge"
                elif (j==2):
                    k="Vert"
                elif (j==3):
                    k="Jaune"
                else:
                    print("J : "+str(j))
                    k="Violet"
                f_temp.write("Equipe "+str(i+1)+" "+k+ " : "+str(equipes[j+i*5])+"\n")
                f_temp.write('\n')
                nb_equipe-=1
        
        
    #for i in range (0, nb_equipe):
    #    f_temp.write("Equipe "+str(i+1)+ " : "+str(equipes[i])+"\n")
    #    f_temp.write('\n')
        
        
        

    f_temp.close()
    
    fen2=Tk()
    fen2.title("Page de résultat")
    
    f_temp = open('fichiertemp.txt', "r")
    f_output = open('Equipes.txt', "w")
    content = f_temp.read()
    mod1 = content.replace("'","")
    mod2 = mod1.replace("[","")
    mod3 = mod2.replace("]","")
    f_output.write(mod3)
    
    f_output.close()
    Label(fen2, text=mod3).pack()


def saisie():
    nb_jpe = maZone.get()
    nb_jpe = int(nb_jpe)
    opentexte(nb_jpe)







#MAIN

#fenetre principale
fen1 = Tk()
fen1.geometry("500x170+100+100")
fen1.title("Page d'accueil")

Titre= LabelFrame(fen1, padx=15, pady=15, bg='#ffffff')
Titre.pack(expand="yes")

Label(Titre, text="Création des équipes - Escape Game Télécom-Saint-Etienne", bg="#ffffff", font=("Helvetica 15 bold")).pack()

Label(fen1, text= "Nombre de joueurs par équipes :").pack()
maZone = Entry(fen1, width=30)
maZone.pack()
maZone.get()

Button(fen1, text = "Ouvrir fichier d'étudiants inscrits", command=saisie).pack()

Label(fen1, text= " ", font=("Helvetica", 12)).pack()

fen1.mainloop()