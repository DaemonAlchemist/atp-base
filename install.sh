#!/bin/bash

# Checkout ATP library
cd vendor
mkdir ATP
cd ATP
git clone www.evilinnocence.com:/var/git/ATP.git .

# Checkout ATP modules
cd ..
mkdir atp-modules
cd atp-modules
git clone www.evilinnocence.com:/var/git/atp-modules.git .

# Checkout Zend Framwork 2
cd ..
mkdir ZF2
cd ZF2
git clone https://github.com/zendframework/zf2.git .

