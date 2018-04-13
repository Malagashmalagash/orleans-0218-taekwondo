<?php
namespace Model\Album\Manager;

use Model\AbstractManager;
use Model\Album;

class Image extends AbstractManager {
    const TABLE = 'gallery_image';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    /**
     * Return images of the requested gallery
     * @param int $galleryId
     * @return Instance[]
     */
    public function getByGalleryId(int $galleryId): array
    {
        $query = $this->pdoConnection->prepare("SELECT * FROM {$this->table} WHERE gallery_id = :galleryId");
        $query->bindValue('galleryId', $galleryId);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_CLASS, Album\Image::class);
    }
}