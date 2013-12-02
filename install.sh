#!/bin/bash

# Switch to the vendor directory
cd vendor

# Declare libraries to install
declare -A libraries
libraries["ATP"]="https://github.com/DaemonAlchemist/atp-base.git"
libraries["ATPAdmin"]="https://github.com/DaemonAlchemist/atp-admin.git"
libraries["ATPCms"]="https://github.com/DaemonAlchemist/atp-cms.git"
libraries["ATPCore"]="https://github.com/DaemonAlchemist/atp-core.git"
libraries["Assetic"]="https://github.com/kriswallsmith/assetic.git"
libraries["AssetManager"]="https://github.com/RWOverdijk/AssetManager.git"
libraries["ZF2"]="https://github.com/zendframework/zf2.git"

# Loop over libraries and install
for dir in "${!libraries[@]}"
do
	# Let us know which library is being processed
	echo "Installing ${libraries[$dir]} in vendor/$dir"
	
	# Check to see if the library is already installed
	if [ ! -d "$dir" ]; then
		# Create the directory and switch to it
		mkdir "$dir"
		cd "$dir"
		
		# Checkout the library
		git clone "${libraries[$dir]}" .
		
		# Go back up to the vendor directory
		cd ..
	else
		# Let us know that the library is already installed
		echo "  - $dir already installed."
	fi
done
