<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Stagia\UtilisateurBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('nom', null, array('label' => 'Nom: '))
            ->add('prenom', null, array('label' => 'Prénom: '))
            ->add('adresse1', null, array('label' => 'Adresse: '))
            ->add('adresse2', null, array('label' => 'Complément d\'adresse: '))
            ->add('codepostal', null, array('label' => 'Code Postal:'))
            ->add('ville', null, array('label' => 'Ville:'))
            ->add('telephone', null, array('label' => 'Téléphone:'))
            ->add('roles', 'choice', array(
                'choices' => array(
                'ROLE_MAITRE_APPRENTISSAGE' => 'Maitre d\'apprentissage',
                'ROLE_RESPONSABLE' => 'Résponsable',
                'ROLE_TUTEUR' => 'Tuteur',
                'ROLE_ETUDIANT' => 'Etudiant',
                //'ROLE_ADMIN' => 'Admin:',
                //'ROLE_SUPER_ADMIN' => 'Super Admin:',
                ),
                'multiple' => true,
                'expanded' => true,
                'empty_value' => false,
            ));

    }

    public function getName()
    {
        return 'stagia_user_registration';
    }
}