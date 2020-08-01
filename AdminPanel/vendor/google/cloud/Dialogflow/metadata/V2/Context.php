<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/context.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Context
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae5170a28676f6f676c652f636c6f75642f6469616c6f67666c6f772f76" .
            "322f636f6e746578742e70726f746f121a676f6f676c652e636c6f75642e" .
            "6469616c6f67666c6f772e76321a17676f6f676c652f6170692f636c6965" .
            "6e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f626568" .
            "6176696f722e70726f746f1a19676f6f676c652f6170692f7265736f7572" .
            "63652e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074" .
            "792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c64" .
            "5f6d61736b2e70726f746f1a1c676f6f676c652f70726f746f6275662f73" .
            "74727563742e70726f746f22d3010a07436f6e7465787412110a046e616d" .
            "651801200128094203e04102121b0a0e6c6966657370616e5f636f756e74" .
            "1802200128054203e0410112300a0a706172616d65746572731803200128" .
            "0b32172e676f6f676c652e70726f746f6275662e5374727563744203e041" .
            "013a66ea41630a216469616c6f67666c6f772e676f6f676c65617069732e" .
            "636f6d2f436f6e74657874123e70726f6a656374732f7b70726f6a656374" .
            "7d2f6167656e742f73657373696f6e732f7b73657373696f6e7d2f636f6e" .
            "74657874732f7b636f6e746578747d225b0a134c697374436f6e74657874" .
            "735265717565737412130a06706172656e741801200128094203e0410212" .
            "160a09706167655f73697a651802200128054203e0410112170a0a706167" .
            "655f746f6b656e1803200128094203e0410122660a144c697374436f6e74" .
            "65787473526573706f6e736512350a08636f6e746578747318012003280b" .
            "32232e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76322e" .
            "436f6e7465787412170a0f6e6578745f706167655f746f6b656e18022001" .
            "2809224c0a11476574436f6e746578745265717565737412370a046e616d" .
            "651801200128094229e04102fa41230a216469616c6f67666c6f772e676f" .
            "6f676c65617069732e636f6d2f436f6e74657874228c010a144372656174" .
            "65436f6e746578745265717565737412390a06706172656e741801200128" .
            "094229e04102fa412312216469616c6f67666c6f772e676f6f676c656170" .
            "69732e636f6d2f436f6e7465787412390a07636f6e746578741802200128" .
            "0b32232e676f6f676c652e636c6f75642e6469616c6f67666c6f772e7632" .
            "2e436f6e746578744203e041022287010a14557064617465436f6e746578" .
            "745265717565737412390a07636f6e7465787418012001280b32232e676f" .
            "6f676c652e636c6f75642e6469616c6f67666c6f772e76322e436f6e7465" .
            "78744203e0410212340a0b7570646174655f6d61736b18022001280b321a" .
            "2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e041" .
            "01224f0a1444656c657465436f6e746578745265717565737412370a046e" .
            "616d651801200128094229e04102fa41230a216469616c6f67666c6f772e" .
            "676f6f676c65617069732e636f6d2f436f6e7465787422550a1844656c65" .
            "7465416c6c436f6e74657874735265717565737412390a06706172656e74" .
            "1801200128094229e04102fa412312216469616c6f67666c6f772e676f6f" .
            "676c65617069732e636f6d2f436f6e74657874329a0d0a08436f6e746578" .
            "74731282020a0c4c697374436f6e7465787473122f2e676f6f676c652e63" .
            "6c6f75642e6469616c6f67666c6f772e76322e4c697374436f6e74657874" .
            "73526571756573741a302e676f6f676c652e636c6f75642e6469616c6f67" .
            "666c6f772e76322e4c697374436f6e7465787473526573706f6e7365228e" .
            "0182d3e493027f12312f76322f7b706172656e743d70726f6a656374732f" .
            "2a2f6167656e742f73657373696f6e732f2a7d2f636f6e74657874735a4a" .
            "12482f76322f7b706172656e743d70726f6a656374732f2a2f6167656e74" .
            "2f656e7669726f6e6d656e74732f2a2f75736572732f2a2f73657373696f" .
            "6e732f2a7d2f636f6e7465787473da4106706172656e7412ef010a0a4765" .
            "74436f6e74657874122d2e676f6f676c652e636c6f75642e6469616c6f67" .
            "666c6f772e76322e476574436f6e74657874526571756573741a232e676f" .
            "6f676c652e636c6f75642e6469616c6f67666c6f772e76322e436f6e7465" .
            "7874228c0182d3e493027f12312f76322f7b6e616d653d70726f6a656374" .
            "732f2a2f6167656e742f73657373696f6e732f2a2f636f6e74657874732f" .
            "2a7d5a4a12482f76322f7b6e616d653d70726f6a656374732f2a2f616765" .
            "6e742f656e7669726f6e6d656e74732f2a2f75736572732f2a2f73657373" .
            "696f6e732f2a2f636f6e74657874732f2a7dda41046e616d651292020a0d" .
            "437265617465436f6e7465787412302e676f6f676c652e636c6f75642e64" .
            "69616c6f67666c6f772e76322e437265617465436f6e7465787452657175" .
            "6573741a232e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e436f6e7465787422a90182d3e49302910122312f76322f7b706172" .
            "656e743d70726f6a656374732f2a2f6167656e742f73657373696f6e732f" .
            "2a7d2f636f6e74657874733a07636f6e746578745a5322482f76322f7b70" .
            "6172656e743d70726f6a656374732f2a2f6167656e742f656e7669726f6e" .
            "6d656e74732f2a2f75736572732f2a2f73657373696f6e732f2a7d2f636f" .
            "6e74657874733a07636f6e74657874da410e706172656e742c636f6e7465" .
            "787412a7020a0d557064617465436f6e7465787412302e676f6f676c652e" .
            "636c6f75642e6469616c6f67666c6f772e76322e557064617465436f6e74" .
            "657874526571756573741a232e676f6f676c652e636c6f75642e6469616c" .
            "6f67666c6f772e76322e436f6e7465787422be0182d3e49302a10132392f" .
            "76322f7b636f6e746578742e6e616d653d70726f6a656374732f2a2f6167" .
            "656e742f73657373696f6e732f2a2f636f6e74657874732f2a7d3a07636f" .
            "6e746578745a5b32502f76322f7b636f6e746578742e6e616d653d70726f" .
            "6a656374732f2a2f6167656e742f656e7669726f6e6d656e74732f2a2f75" .
            "736572732f2a2f73657373696f6e732f2a2f636f6e74657874732f2a7d3a" .
            "07636f6e74657874da4113636f6e746578742c7570646174655f6d61736b" .
            "12e8010a0d44656c657465436f6e7465787412302e676f6f676c652e636c" .
            "6f75642e6469616c6f67666c6f772e76322e44656c657465436f6e746578" .
            "74526571756573741a162e676f6f676c652e70726f746f6275662e456d70" .
            "7479228c0182d3e493027f2a312f76322f7b6e616d653d70726f6a656374" .
            "732f2a2f6167656e742f73657373696f6e732f2a2f636f6e74657874732f" .
            "2a7d5a4a2a482f76322f7b6e616d653d70726f6a656374732f2a2f616765" .
            "6e742f656e7669726f6e6d656e74732f2a2f75736572732f2a2f73657373" .
            "696f6e732f2a2f636f6e74657874732f2a7dda41046e616d6512f2010a11" .
            "44656c657465416c6c436f6e746578747312342e676f6f676c652e636c6f" .
            "75642e6469616c6f67666c6f772e76322e44656c657465416c6c436f6e74" .
            "65787473526571756573741a162e676f6f676c652e70726f746f6275662e" .
            "456d707479228e0182d3e493027f2a312f76322f7b706172656e743d7072" .
            "6f6a656374732f2a2f6167656e742f73657373696f6e732f2a7d2f636f6e" .
            "74657874735a4a2a482f76322f7b706172656e743d70726f6a656374732f" .
            "2a2f6167656e742f656e7669726f6e6d656e74732f2a2f75736572732f2a" .
            "2f73657373696f6e732f2a7d2f636f6e7465787473da4106706172656e74" .
            "1a78ca41196469616c6f67666c6f772e676f6f676c65617069732e636f6d" .
            "d2415968747470733a2f2f7777772e676f6f676c65617069732e636f6d2f" .
            "617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777" .
            "772e676f6f676c65617069732e636f6d2f617574682f6469616c6f67666c" .
            "6f77429b010a1e636f6d2e676f6f676c652e636c6f75642e6469616c6f67" .
            "666c6f772e7632420c436f6e7465787450726f746f50015a44676f6f676c" .
            "652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c656170" .
            "69732f636c6f75642f6469616c6f67666c6f772f76323b6469616c6f6766" .
            "6c6f77f80101a202024446aa021a476f6f676c652e436c6f75642e446961" .
            "6c6f67666c6f772e5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
