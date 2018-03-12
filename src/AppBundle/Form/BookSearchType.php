<?php

namespace AppBundle\Form;

use AppBundle\Entity\BookSearch;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author', EntityType::class, array(
                'class' => 'AppBundle:Author',
                'placeholder' => 'Author',
                'required' => false
            ))
            ->add('isbn', null, array(
                'required' => false
            ));
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => BookSearch::class
        ));
    }
    public function getBlockPrefix()
    {
        return 'app_bundle_book_search_type';
    }
}