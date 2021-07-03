# relative paths only!
IN_DIR='photo'
OUT_DIR='photo_resized'
TMP_DIR='tmp_resized'
QUALITY=60
WIDTH=2000
HEIGHT=1280

# recreate directory structure in temp dir
mkdir -p $TMP_DIR
find $IN_DIR -type d -exec mkdir $TMP_DIR/{} \;

# convert into temp dir
find $IN_DIR -iname '*.jpg' -exec convert {} -quality $QUALITY -resize $WIDTHx$HEIGHT $TMP_DIR/{} \;

#copy to final dir
mkdir $OUT_DIR
mv $TMP_DIR/$IN_DIR/* $OUT_DIR

# clean up
rmdir $TMP_DIR/$IN_DIR
rmdir $TMP_DIR
