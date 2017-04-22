find . -type f -name '*.epub' |
    while read a; do
        ((c++))
        base="${a##*/}"
        mv "$a" "./php/${base%.php}_$(printf %.03d $c).php"
    done
