<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\File;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'label'     => 'First Name',
            ])
            ->add('lastName', null, [
                'label'     => 'Last Name',
            ])
            ->add('streetAddress', null, [
                'label'     => 'Street Address',
            ])
            ->add('zipCode', null, [
                'label'     => 'Zip Code',
            ])
            ->add('city', null, [
                'label'     => 'City',
            ])
            ->add('country', null, [
                'label'     => 'Country',
            ])
            ->add('phoneNumber', null, [
                'label'     => 'Phone Number',
            ])
            ->add('birthDate', null, [
                'label'     => 'Birth Date',
                'widget'    => 'single_text',
            ])
            ->add('emailAddress', null, [
                'label'     => 'Email Address',
            ])
            ->add('picture', FileType::class, [
                'label' => 'Picture (PNG/JPG file)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PNG/JPEG file',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
