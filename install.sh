#!/bin/bash

cd vendor

# Checkout ATP library
if [ ! -d ATP ]; then
	mkdir ATP
	cd ATP
	git clone www.evilinnocence.com:/var/git/ATP.git .
	cd ..
else
	echo "ATP library already installed."
fi
	
# Checkout ATP modules
if [ ! -d atp-modules ]; then
	mkdir atp-modules
	cd atp-modules
	git clone www.evilinnocence.com:/var/git/atp-modules.git .
	cd ..
else
	echo "ATP standard modules already installed."
fi

# Checkout AssetManager module
if [ ! -d AssetManager ]; then
	mkdir AssetManager
	cd AssetManager
	git clone https://github.com/RWOverdijk/AssetManager.git .
	cd ..
else
	echo "Asset Manager module already installed."
fi

# Checkout Zend Framwork 2
if [ ! -d ZF2 ]; then
	mkdir ZF2
	cd ZF2
	git clone https://github.com/zendframework/zf2.git .
	cd ..
else
	echo "Zend Framework 2 already installed."
fi
