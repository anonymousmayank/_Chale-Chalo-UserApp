<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace GPBMetadata\Google\Bigtable\Admin\V2;

class Instance
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Bigtable\Admin\V2\Common::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abb0d0a27676f6f676c652f6269677461626c652f61646d696e2f76322f" .
            "696e7374616e63652e70726f746f1218676f6f676c652e6269677461626c" .
            "652e61646d696e2e76321a19676f6f676c652f6170692f7265736f757263" .
            "652e70726f746f1a25676f6f676c652f6269677461626c652f61646d696e" .
            "2f76322f636f6d6d6f6e2e70726f746f22dd030a08496e7374616e636512" .
            "110a046e616d651801200128094203e0410312190a0c646973706c61795f" .
            "6e616d651802200128094203e0410212370a05737461746518032001280e" .
            "32282e676f6f676c652e6269677461626c652e61646d696e2e76322e496e" .
            "7374616e63652e537461746512350a047479706518042001280e32272e67" .
            "6f6f676c652e6269677461626c652e61646d696e2e76322e496e7374616e" .
            "63652e54797065123e0a066c6162656c7318052003280b322e2e676f6f67" .
            "6c652e6269677461626c652e61646d696e2e76322e496e7374616e63652e" .
            "4c6162656c73456e7472791a2d0a0b4c6162656c73456e747279120b0a03" .
            "6b6579180120012809120d0a0576616c75651802200128093a0238012235" .
            "0a05537461746512130a0f53544154455f4e4f545f4b4e4f574e10001209" .
            "0a0552454144591001120c0a084352454154494e471002223d0a04547970" .
            "6512140a10545950455f554e5350454349464945441000120e0a0a50524f" .
            "44554354494f4e1001120f0a0b444556454c4f504d454e5410023a4eea41" .
            "4b0a206269677461626c652e676f6f676c65617069732e636f6d2f496e73" .
            "74616e6365122770726f6a656374732f7b70726f6a6563747d2f696e7374" .
            "616e6365732f7b696e7374616e63657d22a7030a07436c75737465721211" .
            "0a046e616d651801200128094203e0410312380a086c6f636174696f6e18" .
            "02200128094226fa41230a216c6f636174696f6e732e676f6f676c656170" .
            "69732e636f6d2f4c6f636174696f6e123b0a05737461746518032001280e" .
            "32272e676f6f676c652e6269677461626c652e61646d696e2e76322e436c" .
            "75737465722e53746174654203e0410312180a0b73657276655f6e6f6465" .
            "731804200128054203e0410212430a1464656661756c745f73746f726167" .
            "655f7479706518052001280e32252e676f6f676c652e6269677461626c65" .
            "2e61646d696e2e76322e53746f726167655479706522510a055374617465" .
            "12130a0f53544154455f4e4f545f4b4e4f574e100012090a055245414459" .
            "1001120c0a084352454154494e471002120c0a08524553495a494e471003" .
            "120c0a0844495341424c454410043a60ea415d0a1f6269677461626c652e" .
            "676f6f676c65617069732e636f6d2f436c7573746572123a70726f6a6563" .
            "74732f7b70726f6a6563747d2f696e7374616e6365732f7b696e7374616e" .
            "63657d2f636c7573746572732f7b636c75737465727d22ee030a0a417070" .
            "50726f66696c65120c0a046e616d65180120012809120c0a046574616718" .
            "022001280912130a0b6465736372697074696f6e18032001280912670a1d" .
            "6d756c74695f636c75737465725f726f7574696e675f7573655f616e7918" .
            "052001280b323e2e676f6f676c652e6269677461626c652e61646d696e2e" .
            "76322e41707050726f66696c652e4d756c7469436c7573746572526f7574" .
            "696e67557365416e794800125b0a1673696e676c655f636c75737465725f" .
            "726f7574696e6718062001280b32392e676f6f676c652e6269677461626c" .
            "652e61646d696e2e76322e41707050726f66696c652e53696e676c65436c" .
            "7573746572526f7574696e6748001a1b0a194d756c7469436c7573746572" .
            "526f7574696e67557365416e791a4e0a1453696e676c65436c7573746572" .
            "526f7574696e6712120a0a636c75737465725f696418012001280912220a" .
            "1a616c6c6f775f7472616e73616374696f6e616c5f777269746573180220" .
            "0128083a6aea41670a226269677461626c652e676f6f676c65617069732e" .
            "636f6d2f41707050726f66696c65124170726f6a656374732f7b70726f6a" .
            "6563747d2f696e7374616e6365732f7b696e7374616e63657d2f61707050" .
            "726f66696c65732f7b6170705f70726f66696c657d42100a0e726f757469" .
            "6e675f706f6c69637942b0010a1c636f6d2e676f6f676c652e6269677461" .
            "626c652e61646d696e2e7632420d496e7374616e636550726f746f50015a" .
            "3d676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f" .
            "6f676c65617069732f6269677461626c652f61646d696e2f76323b61646d" .
            "696eaa021e476f6f676c652e436c6f75642e4269677461626c652e41646d" .
            "696e2e5632ca021e476f6f676c655c436c6f75645c4269677461626c655c" .
            "41646d696e5c5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
