# relative paths only!
IN_DIR='photo'
OUT_DIR='resized'
QUALITY=60
WIDTH=2000
HEIGHT=1280

mkdir $OUT_DIR
find $IN_DIR -type d -exec mkdir $OUT_DIR/{} \;
find $IN_DIR -iname '*.jpg' -exec convert {} -quality $QUALITY -resize $WIDTHx$HEIGHT $OUT_DIR/{} \;

