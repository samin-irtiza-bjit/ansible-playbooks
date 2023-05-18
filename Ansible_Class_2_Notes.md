# Ansible Class 2 Notes

Topics: Ansible Playbooks & Modules

## Introduction to YAML

Basic YAML structure

```
--- # always starts with that for ansible

Services: #key
    - name : < >
    key1 : value1 #value
    key2 : value 2
```

## Ansible Playbook

### Basic Playbook Structure
Task structure
```
- name: <name>
hosts: webserver # Inventory host groupname
become: yes
tasks:
    - name: <name> # '-' denotes a list item instead of a key:value dictionary pair
    yum:
        name: httpd
        state: latest
        notify: "restart httpd" # here 'restart httpd' is a name of a handler task
    
    handlers:
        - name: restart httpd

```
For Ubuntu

```
    -
- hosts: all
become: yes
tasks:
    name: Install Package
        apt: 
        name: httpd

```

## Apache folder Structure

installs at /etc/httpd/

/etc/httpd/
- ssl
- conf
- conf.d
- modules

/var/log/httpd/
- eqrror
- info

### **Logrotate**

compressing and backing up logfiles to save cloud storage

---

# Class Task

Write 2 playbooks for 2 clients and install LAMP stack nginx and apache based on your choice.