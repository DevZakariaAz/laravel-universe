# Rapport de Laravel : Premier Pas vers un Développement Web Efficace




### **Realise par** : 
Zakaria Azizi , Fahd Suirita, Oussama Bardich, Jarane Hamza, Tamraoui Abdelouahab 

### **Encadrée par :**
Mr.ESSARRAJ Fouad

---
{% assign pages = site.pages | sort: "order" %}
{% for page in pages %}
 {% if page.chapitre %}
    {{- page.content | markdownify -}}
  {% endif %}
{% endfor %}