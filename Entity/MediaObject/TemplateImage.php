<?php

namespace Zakjakub\OswisTemplateExampleBundle\Entity\MediaObject;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\HttpFoundation\File\File;
use Zakjakub\OswisCoreBundle\Entity\AbstractClass\AbstractImage;
use Zakjakub\OswisTemplateExampleBundle\Controller\MediaObject\CreateTemplateImageAction;

/**
 * @Doctrine\ORM\Mapping\Entity()
 * @Doctrine\ORM\Mapping\Table(name="template_example_image")
 * @ApiResource(iri="http://schema.org/ImageObject", collectionOperations={
 *     "get",
 *     "post"={
 *         "method"="POST",
 *         "path"="/template_example_template_image",
 *         "controller"=CreateTemplateImageAction::class,
 *         "defaults"={"_api_receive"=false},
 *     },
 * })
 * @Vich\UploaderBundle\Mapping\Annotation\Uploadable()
 */
class TemplateImage extends AbstractImage
{
    /**
     * @Symfony\Component\Validator\Constraints\NotNull()
     * @Vich\UploaderBundle\Mapping\Annotation\UploadableField(
     *     mapping="template_example_image",
     *     fileNameProperty="contentUrl",
     *     dimensions={"contentDimensionsWidth", "contentDimensionsHeight"},
     *     mimeType="contentDimensionsMimeType"
     * )
     */
    public ?File $file = null;
}
