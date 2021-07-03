# relative paths only!
IN_DIR='photo'
OUT_DIR='photo_resized'
TMP_DIR='tmp_resized'

# recreate directory structure in temp dir
mkdir -p $TMP_DIR
find $IN_DIR -type d -exec mkdir $TMP_DIR/{} \;

# convert into temp dir
find $IN_DIR -iname '*.jpg' -exec convert {} -resize 1024x800 $TMP_DIR/{} \;

#copy to final dir
mkdir $OUT_DIR
mv $TMP_DIR/$IN_DIR/* $OUT_DIR

# clean up
rmdir $TMP_DIR/$IN_DIR
rmdir $TMP_DIR
