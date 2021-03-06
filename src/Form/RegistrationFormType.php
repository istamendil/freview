<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['autocomplete' => 'new-password']],
                'required' => true,
                'mapped' => false,
                'first_options' => [
                    'label' => 'Password',
                    'constraints' => [
                        new NotBlank([
                                         'message' => 'Please enter a password',
                                     ]),
                        new Length([
                                       'min' => 6,
                                       'minMessage' => 'Your password should be at least {{ limit }} characters',
                                       // max length allowed by Symfony for security reasons
                                       'max' => 4096,
                                   ]),
                    ],
                ],
                'second_options' => ['label' => 'Repeat Password'],
            ])
            ->add('nickname')
            ->add('fullname');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
                                   'data_class' => User::class,
                               ]);
    }
}
