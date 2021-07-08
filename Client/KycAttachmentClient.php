<?php

namespace Smoney\Smoney\Client;

use Smoney\Smoney\Client\AbstractClient;
use Smoney\Smoney\Facade\KycAttachmentFacade;

/**
 * Class KycAttachmentClient
 */
class KycAttachmentClient extends AbstractClient
{
    /**
     * @param string $appUserId
     * @param array  $files with key as filename and value as file content
     * 
     * @return KycFacade
     */
    public function create($appUserId, $files)
    {
        $uri = 'users/'.$appUserId.'/kyc';

        $multiparts = [];
        
        $i = 1;
        foreach ($files as $key => $value) {
            $multiparts[] = [
                'name' => 'file-'.$i,
                'contents' => $value,
                'filename' => $key
            ];
            $i ++;
        }
        
        $res = $this->action('POST', $uri, ['multipart' => $multiparts], ['Content-Type'=>null]);

        return $this->serializer->deserialize($res, 'Smoney\Smoney\Facade\KycFacade', 'json');
    }

    /**
     * @param string $appUserId
     * @param string $kycAtatchmentId
     * 
     * @return KycAttachmentFacade
     */
    public function get($appUserId, $kycAttachmentId)
    {
        $uri = 'users/'.$appUserId.'/attachments/'.$kycAttachmentId;
        $res = $this->action('GET', $uri);

        return $this->serializer->deserialize($res, 'Smoney\Smoney\Facade\KycAttachmentFacade', 'json');
    }

    /**
     * @param string $appUserId
     * @param string $kycAtatchmentId
     * 
     * @return void
     */
    public function delete($appUserId, $kycAttachmentId)
    {
        $uri = 'users/'.$appUserId.'/attachments/'.$kycAttachmentId;
        $res = $this->action('DELETE', $uri);
    }
}
